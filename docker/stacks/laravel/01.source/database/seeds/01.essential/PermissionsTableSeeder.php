<?php

namespace Seed\Essential;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        # Get sql dump
        $sql = file_get_contents(__DIR__ . '/dumps/permissions.sql');
        DB::unprepared($sql);

        # old code
        // self::seedPermission('api.index', 'View the api info', 11, 'API_info');
        // self::seedPermission('api.log.index');
        // self::seedPermission('api.log.show');
        // self::seedPermission('company.index');
        // self::seedPermission('company.index.company');
        // self::seedPermission('company.index.user');
        // self::seedPermission('company.show');
        // self::seedPermission('company.show.company');
        // self::seedPermission('company.show.user');
        // self::seedPermission('company.create');
        // self::seedPermission('company.edit');
        // self::seedPermission('debug.console', 'Development Console', 27, 'DEBUG_development_console');
        // self::seedPermission('debug.log.show', '', 25, 'DEBUG_log_view');
        // self::seedPermission('debug.server.edit', '', 26, 'DEBUG_server_select');
        // self::seedPermission('debug.server.show');
        // self::seedPermission('permission.create', 'Give a user a permission', 12, 'PERMS_add');
        // self::seedPermission('permission.destroy', 'Remove a permission from a user', 14, 'PERMS_del');
        // self::seedPermission('permission.index', 'View users own permissions', 8, 'PERMS_view_all_own');
        // self::seedPermission('permission.index.user', 'View users own allowed permissions', 7, 'PERMS_view_own');
        // self::seedPermission('questionnaire.create', 'Add Questionnaire', 1, 'QNR_add');
        // self::seedPermission('questionnaire.destroy', 'Delete Questionnaire', 3, 'QNR_del');
        // self::seedPermission('questionnaire.draft.arrange');
        // self::seedPermission('questionnaire.draft.create', '', 16, 'QNR_DRAFT_new');
        // self::seedPermission('questionnaire.draft.delete');
        // self::seedPermission('questionnaire.draft.duplicate');
        // self::seedPermission('questionnaire.draft.edit', '', 17, 'QNR_DRAFT_edit');
        // self::seedPermission('questionnaire.draft.show', '', 15, 'QNR_DRAFT');
        // self::seedPermission('questionnaire.edit', 'Edit Questionnaire', 2, 'QNR_edit');
        // self::seedPermission('questionnaire.index', 'View list of all questionnaires', 9, 'QNR_list');
        // self::seedPermission('questionnaire.pdf.show', 'Get pdf of questionnaires', 10, 'QNR_pdf');
        // self::seedPermission('questionnaire.show');

        // self::seedPermission('parameterValue.create');
        // self::seedPermission('parameterValue.index');
        // self::seedPermission('parameterValue.show');
        // self::seedPermission('parameterValue.edit');

        // self::seedPermission('questionnaireCategory.create');
        // self::seedPermission('questionnaireCategory.index');
        // self::seedPermission('questionnaireCategory.show');
        // self::seedPermission('questionnaireCategory.edit');
        
        // self::seedPermission('parameter.create');
        // self::seedPermission('parameter.index');
        // self::seedPermission('parameter.show');
        // self::seedPermission('parameter.edit');

        // self::seedPermission('questionnaireCategory.create');
        // self::seedPermission('questionnaireCategory.index');
        // self::seedPermission('questionnaireCategory.show');
        // self::seedPermission('questionnaireCategory.edit');

        // self::seedPermission('questionnaireGroup.create');
        // self::seedPermission('questionnaireGroup.index');
        // self::seedPermission('questionnaireGroup.show');
        // self::seedPermission('questionnaireGroup.edit');

        // self::seedPermission('measurement.create');
        // self::seedPermission('measurement.index');
        // self::seedPermission('measurement.show');
        // self::seedPermission('measurement.edit');

        // self::seedPermission('setup.create');
        // self::seedPermission('setup.index', '', 38, 'STP_list_all');
        // self::seedPermission('setup.index.company', '', 39, 'STP_list_own_company');
        // self::seedPermission('setup.index.user');
        // self::seedPermission('setup.show');
        // self::seedPermission('setup.show.company');
        // self::seedPermission('setup.show.user');
        // self::seedPermission('setup.stream.index', 'List all current streams', 46, 'STP_stream_list_all');
        // self::seedPermission('setup.stream.index.company', 'List all streams by own company', 47, 'STP_stream_list_own_company');
        // self::seedPermission('setup.edit');

        // self::seedPermission('instrument.create');
        // self::seedPermission('instrument.index');
        // self::seedPermission('instrument.show');
        // self::seedPermission('instrument.edit');

        // self::seedPermission('instrumentType.create');
        // self::seedPermission('instrumentType.index');
        // self::seedPermission('instrumentType.show');
        // self::seedPermission('instrumentType.edit');

        // self::seedPermission('submission.create');
        // self::seedPermission('submission.edit', '', 30, 'QNR_SBM_edit_all');
        // self::seedPermission('submission.edit.company', '', 29, 'QNR_SBM_edit_company');
        // self::seedPermission('submission.edit.user', '', 28, 'QNR_SBM_edit_own');
        // self::seedPermission('submission.index', 'View the list of all submitted questionnaires', 19, 'QNR_SBM_list_all');
        // self::seedPermission('submission.index.company');
        // self::seedPermission('submission.index.user', 'View the list of all own submitted questionnaires ', 20, 'QNR_SBM_list_own');
        // self::seedPermission('submission.pdf.show', '', 21, 'QNR_SBM_pdf_all');
        // self::seedPermission('submission.pdf.show.company');
        // self::seedPermission('submission.pdf.show.user', '', 22, 'QNR_SBM_pdf_own');
        // self::seedPermission('submission.show');
        // self::seedPermission('submission.show.company');
        // self::seedPermission('submission.show.user');
        // self::seedPermission('user.create', 'Add User', 4, 'USR_add_all');
        // self::seedPermission('user.create.company', 'Add users to own company', 40, 'USR_add_own_company');
        // self::seedPermission('user.destroy', 'Delete User', 6, 'USR_del_all');
        // self::seedPermission('user.destroy.company');
        // self::seedPermission('user.edit', 'Edit User', 5, 'USR_edit_all');
        // self::seedPermission('user.edit.company', 'Edit User from own company', 43, 'USR_edit_own_company');
        // self::seedPermission('user.index', 'List all users', 42, 'USR_list_all');
        // self::seedPermission('user.index.company', 'List all users from own company', 41, 'USR_list_own_company');
        // self::seedPermission('user.permission.create');
        // self::seedPermission('user.permission.edit');
        // self::seedPermission('user.permission.index', '', 44, 'PERMS_USR_list_all');
        // self::seedPermission('user.permission.index.company');
        // self::seedPermission('user.permission.index.user', '', 45, 'PERMS_USR_list_own_company');
        // self::seedPermission('user.permission.show');
        // self::seedPermission('user.permission.show.company');
        // self::seedPermission('user.permission.show.user');
        // self::seedPermission('user.show');
        // self::seedPermission('user.show.company');
        // self::seedPermission('user.show.user');
    }

    // protected static function seedPermission($name, $description = null, $old_id = null, $old_name = null){
    //     DB::table('permissions')->updateOrInsert(
    //         [
    //             'uuid'              => $name,
    //         ],[
    //             'uuid'              => $name,
    //             'name_en'           => $name,
    //             'description_en'    => $description,
    //             'old_id'            => $old_id,
    //             'old_name'          => $old_name,
    //         ]
    //     );
    // }
}
