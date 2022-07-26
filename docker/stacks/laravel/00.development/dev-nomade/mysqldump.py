#!/usr/bin/env python3

############################################################################
## NOMADe (Development Branch)  webservice starting script                ##
## Author: Frederic Depuydt                                               ##
## Mail: frederic.depuydt@outlook.com                                     ##
##                                                                        ##
## Executing this script requires the 'depuydt' python libraries          ##
## https://github.com/fredericdepuydt/python-libraries                    ##
##                                                                        ##
############################################################################
import sys
sys.path.append("/mnt/usb/lib")
## INCLUDES
from depuydt import echo
from depuydt import command
from depuydt import docker

## TITLE
echo.section("DOCKER DEPLOYING","NOMADE (Development Branch) (Migrating)");

## Creating the volumes, networks and containers


# DUMP
if False:
    folder = "/home/kaho/docker/laravel/01.source/database/seeds/";
    command.exec('sudo mysqldump -u root nomade_old AUTH_log  > ' + folder + '02.nomade/dumps/AUTH_log.sql');
    command.exec('sudo mysqldump -u root nomade_old AUTH_nonces  > ' + folder + '02.nomade/dumps/AUTH_nonces.sql');
    #command.exec('sudo mysqldump -u root nomade_old LOG_api  > ' + folder + 'LOG_api.sql');
    #command.exec('sudo mysqldump -u root nomade_old LOG_raw  > ' + folder + 'LOG_raw.sql');
    command.exec('sudo mysqldump -u root nomade_old QNR_answers  > ' + folder + '02.nomade/dumps/QNR_answers.sql');
    command.exec('sudo mysqldump -u root nomade_old QNR_answers_options  > ' + folder + '02.nomade/dumps/QNR_answers_options.sql');
    command.exec('sudo mysqldump -u root nomade_old QNR_answers_types  > ' + folder + '02.nomade/dumps/QNR_answers_types.sql');
    command.exec('sudo mysqldump -u root nomade_old QNR_questionnaires  > ' + folder + '02.nomade/dumps/QNR_questionnaires.sql');
    command.exec('sudo mysqldump -u root nomade_old QNR_questionnaires_groups  > ' + folder + '02.nomade/dumps/QNR_questionnaires_groups.sql');
    command.exec('sudo mysqldump -u root nomade_old QNR_questionnaires_questions  > ' + folder + '02.nomade/dumps/QNR_questionnaires_questions.sql');
    command.exec('sudo mysqldump -u root nomade_old QNR_questions  > ' + folder + '02.nomade/dumps/QNR_questions.sql');
    command.exec('sudo mysqldump -u root nomade_old QNR_questions_answers  > ' + folder + '02.nomade/dumps/QNR_questions_answers.sql');
    command.exec('sudo mysqldump -u root nomade_old QNR_questions_condition  > ' + folder + '02.nomade/dumps/QNR_questions_condition.sql');
    command.exec('sudo mysqldump -u root nomade_old QNR_SBM_ANS  > ' + folder + '02.nomade/dumps/QNR_SBM_ANS.sql');
    command.exec('sudo mysqldump -u root nomade_old QNR_SBM_ANS_custom  > ' + folder + '02.nomade/dumps/QNR_SBM_ANS_custom.sql');
    command.exec('sudo mysqldump -u root nomade_old QNR_SBM_ANS_number  > ' + folder + '02.nomade/dumps/QNR_SBM_ANS_number.sql');
    command.exec('sudo mysqldump -u root nomade_old QNR_SBM_questionnaires  > ' + folder + '02.nomade/dumps/QNR_SBM_questionnaires.sql');
    command.exec('sudo mysqldump -u root nomade_old STP_instruments  > ' + folder + '02.nomade/dumps/STP_instruments.sql');
    command.exec('sudo mysqldump -u root nomade_old STP_instrument_parameter_values  > ' + folder + '02.nomade/dumps/STP_instrument_parameter_values.sql');
    command.exec('sudo mysqldump -u root nomade_old STP_instrument_types  > ' + folder + '02.nomade/dumps/STP_instrument_types.sql');
    command.exec('sudo mysqldump -u root nomade_old STP_instrument_type_parameter_values  > ' + folder + '02.nomade/dumps/STP_instrument_type_parameter_values.sql');
    command.exec('sudo mysqldump -u root nomade_old STP_measurements  > ' + folder + '02.nomade/dumps/STP_measurements.sql');
    #command.exec('sudo mysqldump -u root nomade_old STP_measurement_data  > ' + folder + 'STP_measurement_data.sql');
    #command.exec('sudo mysqldump -u root nomade_old STP_measurement_dataset  > ' + folder + 'STP_measurement_dataset.sql');
    command.exec('sudo mysqldump -u root nomade_old STP_measurement_parameter_values  > ' + folder + '02.nomade/dumps/STP_measurement_parameter_values.sql');
    command.exec('sudo mysqldump -u root nomade_old STP_measurement_streams  > ' + folder + '02.nomade/dumps/STP_measurement_streams.sql');
    command.exec('sudo mysqldump -u root nomade_old STP_parameters  > ' + folder + '01.shared/dumps/STP_parameters.sql');
    command.exec('sudo mysqldump -u root nomade_old STP_parameter_value_description  > ' + folder + '01.shared/dumps/STP_parameter_value_description.sql');
    command.exec('sudo mysqldump -u root nomade_old STP_setups  > ' + folder + '02.nomade/dumps/STP_setups.sql');
    command.exec('sudo mysqldump -u root nomade_old STP_setups_groups  > ' + folder + '02.nomade/dumps/STP_setups_groups.sql');
    command.exec('sudo mysqldump -u root nomade_old STP_setups_instruments  > ' + folder + '02.nomade/dumps/STP_setups_instruments.sql');
    command.exec('sudo mysqldump -u root nomade_old STP_setups_users  > ' + folder + '02.nomade/dumps/STP_setups_users.sql');
    command.exec('sudo mysqldump -u root nomade_old USR_companies  > ' + folder + '02.nomade/dumps/USR_companies.sql');
    command.exec('sudo mysqldump -u root nomade_old USR_permissions  > ' + folder + '02.nomade/dumps/USR_permissions.sql');
    command.exec('sudo mysqldump -u root nomade_old USR_roles  > ' + folder + '02.nomade/dumps/USR_roles.sql');
    command.exec('sudo mysqldump -u root nomade_old USR_roles_permissions  > ' + folder + '01.shared/dumps/USR_roles_permissions.sql');
    command.exec('sudo mysqldump -u root nomade_old USR_users  > ' + folder + '02.nomade/dumps/USR_users.sql');
    command.exec('sudo mysqldump -u root nomade_old USR_users_permissions  > ' + folder + '02.nomade/dumps/USR_users_permissions.sql');
    command.exec('sudo mysqldump -u root nomade_old USR_users_roles  > ' + folder + '02.nomade/dumps/USR_users_roles.sql');


docker.Compose.exec(None, "php", "sh -c 'php artisan migrate'");
docker.Compose.exec(None, "php", "sh -c 'php artisan db:seed'");