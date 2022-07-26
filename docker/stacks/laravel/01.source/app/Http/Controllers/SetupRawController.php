<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Setup;
use App\SetupCategory;

class SetupRawController extends Controller
{



    protected $raw;

    public function raw(Setup $setup){
        $this->authorize('view', Setup::class);
        $setup->load('instruments','instruments.parameters');
        //dd($setup);


        $this->raw = '';
        $table ='<h1>Table of RAW Setup Format for Setup ' . $setup->id . '</h1>' .
                '<table>' .
                '   <tr>' .
                '       <th colspan="3"># bits</th>' .
                '       <th>Meaning</th>' .
                '       <th>Value</th>' .
                '       <th>Raw</th>' .
                '       <th>Value meaning</th>' .
                '   </tr>';

        //Setup Header
        $table .= $this->MakeRow("#BDD6EE", 8, "Start of heading (SOH)", 1, "ASCII SOH");
        $table .= $this->MakeRow("#F7CAAC", 16, "SETUP ID", $setup->id, "Setup ID = " . $setup->id);
        $table .= $this->MakeRow("#F7CAAC", 16, "Version", $setup->version, "Version = " . $setup->version, 0, false);
        $table .= $this->MakeRow("#F7CAAC", 16, "COMPANY ID", 0 , "Company ID (Deprecated)");
        $table .= $this->MakeRow("#BDD6EE", 8, "Start of text (STX)", 2, "ASCII STX");

        $raw_header = $this->raw;
        $this->raw = "";

        //Instruments
        $instrument_counter = 0;
        $table_instruments = '';

        foreach ($setup->instruments as $instrument) {
            $app_instrument_app_only = false;

            //Counting the number of parameters
            $number_of_parameters = 0;
            foreach ($instrument->parameters as $parameter) {
                // Check if the instrument has to be sent to the mainboard
                if ($parameter->uuid == 'App.Instrument.App_only' && $parameter->pivot->value) {
                    $app_instrument_app_only = true;
                    break;
                }
                // Count only parameters that need to be send to the mainboard
                elseif ($parameter->mainboard) {
                    $number_of_parameters++;
                }
            }

            // Add instrument to Table
            if (!$app_instrument_app_only) {
                $table_instruments .= $this->MakeRow("#FFE598", 16, "INSTRUMENT ID", $instrument->id, "Instrument " . ($instrument_counter + 1) . " ID = " . $instrument->id, 1);
                $table_instruments .= $this->MakeRow("#A8D08D", 16, "#NUMBER OF PARAMETERS", $number_of_parameters, $number_of_parameters . " parameters follow for instrument " . $instrument_counter, 1, false);
                foreach ($instrument->parameters as $parameter) {
                    // Send only parameters that need to be send to the mainboard
                    if ($parameter->mainboard) {
                        $table_instruments .= $this->MakeRow("#C5E0B3", 16, "PARAMETER ID", $parameter->id, '<a href="/parameters/' . $parameter->id . '/">ID ' . $parameter->id . ' &rarr; ' . $parameter->uuid . '</a>',
                                2, true, false, "border-style: dotted solid none solid; border-width: 1px 2px 0px 2px;");
                        $table_instruments .= $this->MakeRow("#C5E0B3", 32, "PARAMETER VALUE", $parameter->pivot->value,
                                "Value " . $parameter->pivot->value . " " . (isset($parameter->valuedescription) ? "&rarr; " . $parameter->description : '<span style="color:#888888;">&rarr; (No specific info in DB)</span>'),
                                2, false, true, "border-style: none solid dotted solid; border-width: 0px 2px 1px 2px;");
                    }
                }
                $instrument_counter++;
            }
        }
        $raw_instruments = $this->raw;
        $this->raw = $raw_header;

        $table .= $this->MakeRow("#FFD965", 16, "#NUMBER OF INSTRUMENTS", $instrument_counter, $instrument_counter . " instruments follow", 0, false);

        $table .= $table_instruments;
        $this->raw .= $raw_instruments;

        $table .= $this->MakeRow("#BDD6EE", 8, "End of text (ETX)", 3, "ASCII ETX");
        $table .= $this->MakeRow("#BDD6EE", 8, "End of transmission (EOT)", 4, "ASCII EOT");

        $table .= '</table>';

        $raw_length = strlen($this->raw) / 2;

        $this->raw = wordwrap($this->raw, 2, ' ', true);
        $this->raw = wordwrap($this->raw, 24, '    ', true);
        $this->raw = wordwrap($this->raw, 54, '<br/>', true);
        $this->raw = str_replace(' ', '&nbsp', $this->raw);

        $raw = $this->raw;
        return view('setup.raw', compact('setup', 'table', 'raw'));
    }

    private function MakeRow($color, $bits, $name, $value, $info, $offset = 0, $hex = true, $float = false, $border = "") {
        $raw = ($float ? strtoupper($this->rawSingleHex($value)) : sprintf('%0' . ($bits / 4) . 'X', $value));
        $this->raw .= $raw;
        return '<tr style="background-color: ' . $color . ';">' .
                str_repeat('<td style="border: 0px; background-color: #FFFFFF;"></td>', $offset) .
                '<td style="' . $border . '"' . ($offset < 2 ? (' colspan="' . (3 - $offset) . '"') : '') . '>' . $bits . '</td>' .
                '<td style="' . $border . '">' . $name . '</td>' .
                '<td style="' . $border . '">' . $value . '</td>' .
                //'<td style="' . $border . '">' . ($hex ? '0x' . sprintf('%0' . ($bits / 4) . 'X', $value) : $value) . '</td>' .
                '<td style="' . $border . '">' . wordwrap($raw, 2, ' ', true) . '</td>' .
                '<td style="' . $border . '; text-align: left;">' . $info . '</td>' .
                '</tr>';
    }

    private function rawSingleHex($num) {
        return strrev(unpack('h*', pack('f', $num))[1]);
    }
}