<?php

namespace Tests\Unit;

use App\Http\Controllers\V1\Skills\SkillController;
use App\Http\Requests\V1\Skill\StoreSkillRequest;
use App\Http\Requests\V1\Skill\UpdateSkillRequest;
use App\Http\Services\SkillService;
use Illuminate\Http\RedirectResponse;
use Tests\TestCase;
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

        $response = $this->get('/skills', ['HTTP_X-Requested-With' => 'XMLHttpRequest']);

        $response->assertStatus(302);
        $response->assertRedirect('/login');

        $followedResponse = $this->get($response->headers->get('Location'));
        $followedResponse->assertStatus(200);

        $urlGenerator = app(\Illuminate\Routing\UrlGenerator::class);
        $targetUrl = $urlGenerator->current();

        $finalResponse = $this->get($targetUrl);

        $finalResponse->assertStatus(200);
        $response->assertRedirect('/login');
    }

    public function testStoreMethod()
    {
        $request = Mockery::mock(StoreSkillRequest::class);
        $request->shouldReceive('validated')->once()->andReturn([
            'title' => 'Test Skill',
            'section' => 3,
            'percentage' => 90,
        ]);

        $skillService = Mockery::mock(SkillService::class);
        $skillService->shouldReceive('store')->once()->with([
            'title' => 'Test Skill',
            'section' => 3,
            'percentage' => 90,
            ]);

        $controller = new SkillController($skillService);

        $response = $controller->store($request);

        $this->assertInstanceOf(RedirectResponse::class, $response);
        $this->assertEquals(route('skills.index'), $response->getTargetUrl());
        $this->assertEquals('Skill added successfully', $response->getSession()->get('success'));
    }

    public function testUpdateMethod()
    {
        $request = Mockery::mock(UpdateSkillRequest::class);
        $request->shouldReceive('validated')->once()->andReturn([
            'title' => 'Skill Updated',
            'section' => 3,
            'percentage' => 80,
        ]);

        $skillService = Mockery::mock(SkillService::class);
        $skillService->shouldReceive('update')->once()->with(3, [
            'title' => 'Skill Updated',
            'section' => 3,
            'percentage' => 80,
        ]);

        $controller = new SkillController($skillService);
        $response = $controller->update($request, 3);

        $this->assertInstanceOf(RedirectResponse::class, $response);
        $this->assertEquals(route('skills.index'), $response->getTargetUrl());
        $this->assertEquals('Skill updated successfully', $response->getSession()->get('success'));
    }

}
