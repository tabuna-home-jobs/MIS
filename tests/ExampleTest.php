<?php

use App\Models\User;

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
        $user = new User(array('id'=> '1','name' => 'John', 'email' => 'test@test.xt'));
        $this->be($user);

        $response = $this->action('GET', '/Admin/AdminController@index');

		$this->assertEquals(200, $response->getStatusCode());
	}

}
