<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public static function catalog(): array
    {
        return [
            'custom-software-development' => [
                'title' => 'Custom Software Development',
                'icon' => 'fa-laptop-code',
                'summary' => 'Purpose-built business software designed around your workflows, customers and growth plans.',
                'description' => 'We plan and build custom software for organizations that have outgrown spreadsheets, disconnected tools or off-the-shelf products. From discovery through launch, the product is shaped around the way your business works.',
                'audience' => 'Growing businesses and teams with complex workflows, unique requirements or a product idea ready to become software.',
                'capabilities' => ['Business management platforms', 'Customer portals and internal tools', 'CRM and ERP systems', 'API and third-party integrations', 'Modernization of legacy applications', 'Ongoing maintenance and feature development'],
                'process' => ['Understand your users, goals and constraints', 'Define a practical scope, milestones and architecture', 'Design, build and review in clear iterations', 'Test, launch and support the product'],
                'title_tag' => 'Custom Software Development Company | Ather Digital Hub',
                'meta' => 'Plan and build custom business software around your workflows. Ather Digital Hub develops secure web, mobile and enterprise applications.',
            ],
            'saas-development' => [
                'title' => 'SaaS Development',
                'icon' => 'fa-cloud',
                'summary' => 'SaaS products built for real users, sustainable operations and room to scale.',
                'description' => 'Turn a product concept into a working SaaS platform with the foundations needed to serve customers and evolve. We help define the first release, build the core experience and prepare the architecture for future growth.',
                'audience' => 'Founders, product teams and businesses creating a subscription software product or modernizing an existing platform.',
                'capabilities' => ['SaaS discovery and MVP planning', 'Multi-tenant application architecture', 'Accounts, roles and permissions', 'Subscription and payment integrations', 'Admin dashboards and reporting', 'SaaS modernization and ongoing development'],
                'process' => ['Validate the product goals and first release', 'Map key journeys, roles and data boundaries', 'Build and review the product in milestones', 'Launch, measure usage and plan improvements'],
                'title_tag' => 'SaaS Development Company | Ather Digital Hub',
                'meta' => 'Build a SaaS MVP or grow an existing platform with Ather Digital Hub. Product planning, web application development and ongoing support.',
            ],
            'web-application-development' => [
                'title' => 'Web Application Development',
                'icon' => 'fa-window-maximize',
                'summary' => 'Secure, responsive web applications that connect people, data and business operations.',
                'description' => 'We create web applications that make important work simpler, from customer-facing portals to internal business systems. Each application is designed for its users and built to integrate with the tools and services your team already depends on.',
                'audience' => 'Organizations that need more than a brochure website: a web product, customer portal, operational system or connected business application.',
                'capabilities' => ['Custom web portals and dashboards', 'Customer and partner platforms', 'Workflow and operations applications', 'Laravel and API development', 'Data migration and integrations', 'Performance, security and maintenance'],
                'process' => ['Map users, workflows and integrations', 'Agree on requirements and delivery milestones', 'Design and develop in reviewable increments', 'Test, deploy and support the application'],
                'title_tag' => 'Web Application Development Company | Ather Digital Hub',
                'meta' => 'Ather Digital Hub designs and develops custom web applications, business portals and dashboards with integrations and ongoing support.',
            ],
            'mobile-app-development' => [
                'title' => 'Mobile App Development',
                'icon' => 'fa-mobile-alt',
                'summary' => 'Mobile applications that make your service useful wherever customers and teams work.',
                'description' => 'We build mobile products for customer experiences and field operations, connecting the app to the right services, data and workflows. We help choose a practical approach for your users, features and release goals.',
                'audience' => 'Businesses and product teams that need an iOS and Android application, a companion app or mobile access to existing systems.',
                'capabilities' => ['Cross-platform Flutter applications', 'iOS and Android product development', 'Mobile app UX and prototyping', 'Backend and API integrations', 'Notifications and account flows', 'App maintenance and new releases'],
                'process' => ['Define users, devices and essential journeys', 'Plan the app scope and integration needs', 'Build and test across target devices', 'Prepare release and continue improving'],
                'title_tag' => 'Mobile App Development Company | Ather Digital Hub',
                'meta' => 'Build a custom iOS and Android app with Ather Digital Hub. We develop cross-platform mobile products, integrations and app backends.',
            ],
            'ai-agent-development' => [
                'title' => 'AI Agent & Automation Development',
                'icon' => 'fa-robot',
                'summary' => 'Practical AI agents and workflow automation connected to the tools your business uses.',
                'description' => 'We develop AI agents and assistants for defined business tasks, with integrations, appropriate safeguards and human review where needed. Start with a focused workflow, measure its usefulness and expand based on evidence.',
                'audience' => 'Teams looking to improve customer support, internal knowledge access or repetitive document and operations workflows.',
                'capabilities' => ['AI agents connected to business systems', 'Customer support and knowledge assistants', 'Document processing and information extraction', 'AI workflow automation', 'LLM and API integrations', 'Evaluation, monitoring and human handoff'],
                'process' => ['Choose a specific workflow and success measure', 'Review data access, quality and safety needs', 'Prototype and evaluate with representative cases', 'Integrate, monitor and improve the solution'],
                'title_tag' => 'AI Agent Development Company | Ather Digital Hub',
                'meta' => 'Build AI agents, assistants and workflow automation for real business tasks. Ather Digital Hub delivers integrated AI solutions with evaluation and support.',
            ],
        ];
    }

    public function home()
    {
        return view('front_end.index', [
            'services' => self::catalog(),
            'featuredBlogs' => Blog::published()->inRandomOrder()->take(3)->get(),
        ]);
    }

    public function index()
    {
        return view('front_end.services', ['services' => self::catalog()]);
    }

    public function show(string $slug)
    {
        $services = self::catalog();
        abort_unless(isset($services[$slug]), 404);

        return view('front_end.service-detail', [
            'service' => $services[$slug],
            'slug' => $slug,
            'otherServices' => array_filter($services, fn ($serviceSlug) => $serviceSlug !== $slug, ARRAY_FILTER_USE_KEY),
        ]);
    }
}
