<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        // 1️⃣ Crear un usuario
        $user = User::factory()->create([
            'name' => 'Test User',
            'apellido' => 'Test',
            'genero' => 'Masculino',
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
            'remember_token' => Str::random(10),
            
        ]);

        // 2️⃣ Simular un intento de login
        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'password123'
        ]);

        // 3️⃣ Verificar que el usuario esté autenticado
        $this->assertAuthenticatedAs($user);

        // 4️⃣ Verificar que se redirige al home
        $response->assertRedirect('/home');
    }
}
