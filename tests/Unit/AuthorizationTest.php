<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class AuthorizationTest extends TestCase
{
    /**
     * Only admins can access admin dashboard
     */
    public function test_only_admins_can_access_admin_dashboard(): void
    {
        $user = User::factory()->create([
            'role' => 'ADMIN',
        ]);
        $response = $this->actingAs($user)->get('/admin/dashboard');
        $response->assertStatus(200);
    }


}
