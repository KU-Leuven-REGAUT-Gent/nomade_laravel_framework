<?php
namespace Seed\Shared;

use App\Permission;
use App\Role;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Get sql dump
        $sql = file_get_contents(__DIR__ . '/dumps/permission_role.sql');
        DB::unprepared($sql);

        # old code
        // self::seedPermissionRole('User Type 1','company.index');
        // self::seedPermissionRole('User Type 1','questionnaire.index');
        // self::seedPermissionRole('User Type 1','questionnaire.show');
        // self::seedPermissionRole('User Type 1','setup.index.user');
        // self::seedPermissionRole('User Type 1','submission.index.user');
        // self::seedPermissionRole('User Type 1','submission.create');
        // self::seedPermissionRole('User Type 1','submission.edit.user');
        // self::seedPermissionRole('User Type 1','submission.show.user');

        // self::seedPermissionRole('Developer','company.index');
        // self::seedPermissionRole('Developer','company.show');
        // self::seedPermissionRole('Developer','company.create');
        // self::seedPermissionRole('Developer','company.edit');
        // self::seedPermissionRole('Developer','questionnaire.create');
        // self::seedPermissionRole('Developer','questionnaire.draft.arrange');
        // self::seedPermissionRole('Developer','questionnaire.draft.create');
        // self::seedPermissionRole('Developer','questionnaire.draft.delete');
        // self::seedPermissionRole('Developer','questionnaire.draft.duplicate');
        // self::seedPermissionRole('Developer','questionnaire.draft.edit');
        // self::seedPermissionRole('Developer','questionnaire.draft.show');
        // self::seedPermissionRole('Developer','questionnaire.edit');

        // self::seedPermissionRole('Developer','questionnaireCategory.index');
        // self::seedPermissionRole('Developer','questionnaireCategory.show');
        // self::seedPermissionRole('Developer','questionnaireCategory.create');
        // self::seedPermissionRole('Developer','questionnaireCategory.edit');
        // self::seedPermissionRole('Developer','questionnaireGroup.index');
        // self::seedPermissionRole('Developer','questionnaireGroup.show');
        // self::seedPermissionRole('Developer','questionnaireGroup.create');
        // self::seedPermissionRole('Developer','questionnaireGroup.edit');

        // self::seedPermissionRole('Developer','measurement.create');
        // self::seedPermissionRole('Developer','measurement.index');
        // self::seedPermissionRole('Developer','measurement.show');
        // self::seedPermissionRole('Developer','measurement.edit');

        // self::seedPermissionRole('Developer','setup.index');
        // self::seedPermissionRole('Developer','setup.show');
        // self::seedPermissionRole('Developer','setup.create');
        // self::seedPermissionRole('Developer','setup.edit');

        // self::seedPermissionRole('User Type 1','parameter.index');
        // self::seedPermissionRole('User Type 1','parameter.show');

        // self::seedPermissionRole('Developer','parameter.index');
        // self::seedPermissionRole('Developer','parameter.show');
        // self::seedPermissionRole('Developer','parameter.create');
        // self::seedPermissionRole('Developer','parameter.edit');

        // self::seedPermissionRole('Developer','instrument.index');
        // self::seedPermissionRole('Developer','instrument.show');
        // self::seedPermissionRole('Developer','instrument.create');
        // self::seedPermissionRole('Developer','instrument.edit');
        // self::seedPermissionRole('Developer','instrumentType.index');
        // self::seedPermissionRole('Developer','instrumentType.show');
        // self::seedPermissionRole('Developer','instrumentType.create');
        // self::seedPermissionRole('Developer','instrumentType.edit');

        // self::seedPermissionRole('Developer','submission.index');
        // self::seedPermissionRole('Developer','submission.show');
        // self::seedPermissionRole('Developer','user.index');
        // self::seedPermissionRole('Developer','user.show');
        // self::seedPermissionRole('Developer','user.create');
        // self::seedPermissionRole('Developer','user.edit');

        // self::seedPermissionRole('User Type 2','submission.index.company');
        // self::seedPermissionRole('User Type 2','submission.show.company');
        // self::seedPermissionRole('User Type 2','user.index.company');
        // self::seedPermissionRole('User Type 2','user.create.company');

        // self::seedPermissionRole('Debug','api.log.index');
        // self::seedPermissionRole('Debug','api.log.show');

        // self::seedPermissionRole('Debug','debug.console');
        // self::seedPermissionRole('Debug','debug.log.show');
        // self::seedPermissionRole('Debug','debug.server.edit');
        // self::seedPermissionRole('Debug','debug.server.show');
    }

    // protected static function seedPermissionRole($role, $permission){
    //     $permission_id = (is_int($permission)?$permission:Permission::where('uuid','=',$permission)->first()->id);
    //     $role_id = (is_int($role)?$role:Role::where('name_en','=',$role)->first()->id);

    //     DB::table('permission_role')->updateOrInsert(
    //         [
    //             'permission_id' => $permission_id,
    //             'role_id'       => $role_id,
    //         ],[
    //             'permission_id' => $permission_id,
    //             'role_id'       => $role_id,
    //         ]
    //     );
    // }
}
