<?php

namespace Appwrite;

use PHPUnit\Framework\TestCase;

final class PermissionTest extends TestCase {
    public function testRead(): void {
        $this->assertSame('read("any")', Permission::read(Role::any()));
    }

    public function testWrite(): void {
        $this->assertSame('write("any")', Permission::write(Role::any()));
    }

    public function testCreate(): void {
        $this->assertSame('create("any")', Permission::create(Role::any()));
    }

    public function testUpdate(): void {
        $this->assertSame('update("any")', Permission::update(Role::any()));
    }

    public function testDelete(): void {
        $this->assertSame('delete("any")', Permission::delete(Role::any()));
    }
}
