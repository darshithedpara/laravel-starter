<?php
use App\Role;
use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class LaratrustSeeder
 */
class LaratrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {
        $this->command->info('Truncating User, Role and Permission tables');
        $this->truncateLaratrustTables();

	    // Creating roles for users

	    $admin = new Role();
        $admin->name = 'admin';
        $admin->display_name = 'Admin'; // optional
        $admin->description = 'Admin Users'; // optional
        $admin->save();

	    $registered_user = new Role();
	    $registered_user->name = 'user';
	    $registered_user->display_name = 'User'; // optional
	    $registered_user->description = 'Registered User'; // optional
	    $registered_user->save();
    }

    /**
     * Truncates all the laratrust tables and the users table
     *
     * @return    void
     */
    public function truncateLaratrustTables()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('permission_role')->truncate();
        DB::table('permission_user')->truncate();
        // DB::table('role_user')->truncate();
        // \App\User::truncate();
        \App\Role::truncate();
        \App\Permission::truncate();
        Schema::enableForeignKeyConstraints();
    }
}
