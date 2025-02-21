<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsuarioTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function puede_crear_un_usuario(): void
    {
        // 1️⃣ Simular una solicitud para crear un nuevo usuario
        $response = $this->post('/usuarios', [
            'name' => 'Valentin Rivera',
            'email' => 'valentin@example.com',
            'apellido' => 'Rivera',
            'genero' => 'Masculino',
            'password' => 'password123',
        ]);

        // 2️⃣ Verificar que el usuario fue creado y se redirige a la página deseada
        $response->assertStatus(201); // O el código de redirección que esperas

        // 3️⃣ Verificar que el usuario está en la base de datos
        $this->assertDatabaseHas('users', [
            'email' => 'valentin@example.com',
        ]);
    }
}
