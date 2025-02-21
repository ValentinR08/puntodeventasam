<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
class LoginTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function TestLogin(): void
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password123')
            
        ]);

        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'password123'
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticatedAs($user);
    }
}
