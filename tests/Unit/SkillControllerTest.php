<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Skill;
use Mockery;

class SkillControllerTest extends TestCase
{
    public function tearDown(): void
    {
        parent::tearDown();
        Mockery::close();
    }

    public function testSkillsIndex()
    {
        $request = Mockery::mock(\Illuminate\Http\Request::class);

        $skill = Mockery::mock(Skill::class);
        $skill->shouldReceive('query')->once()->andReturnSelf();

        $dataTable = Mockery::mock(\Yajra\DataTables\DataTables::class);
        $dataTable->shouldReceive('of')->once()->with($skill)->andReturnSelf();

        $view = Mockery::mock(\Illuminate\Contracts\View\View::class);
        $this->app->instance(\Illuminate\Contracts\View\Factory::class, $view);
        $view->shouldReceive('make')->once()->with(true)->andReturnSelf();

        $request->shouldReceive('ajax')->once()->andReturn(true);

        $response = $this->call('GET', '/skills', [], [], [], ['HTTP_X-Requested-With' => 'XMLHttpRequest']);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJson($response->getContent());
    }
}
