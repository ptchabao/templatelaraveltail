<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/features', function () {
    return view('features');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/sign-in', function () {
    return view('sign-in');
});
Route::get('/sign-up', function () {
    return view('sign-up');
});
Route::get('/forgot-password', function () {
    return view('forgot-password');
});
Route::get('/reset-password', function () {
    return view('reset-password');
});
Route::get('/confirm-email', function () {
    return view('confirm-email');
});
Route::get('/lock-screen', function () {
    return view('lock-screen');
});
Route::get('/logout', function () {
    return view('logout');
});
// Route::get('/dashboard', function () {
//     return view('dashboard/ecommerce');
// });

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard.ecommerce');
    });
    Route::get('/crm', function () {
        return view('dashboard.crm');
    });
    Route::get('/project-management', function () {
        return view('dashboard.project-management');
    });
    Route::get('/lms', function () {
        return view('dashboard.lms');
    });
    Route::get('/helpdesk', function () {
        return view('dashboard.helpdesk');
    });
    Route::get('/analytics', function () {
        return view('dashboard.analytics');
    });
    Route::get('/crypto', function () {
        return view('dashboard.crypto');
    });
    Route::get('/sales', function () {
        return view('dashboard.sales');
    });
    Route::get('/hospital', function () {
        return view('dashboard.hospital');
    });
    Route::get('/hrm', function () {
        return view('dashboard.hrm');
    });
    Route::get('/school', function () {
        return view('dashboard.school');
    });
    Route::get('/call-center', function () {
        return view('dashboard.call-center');
    });
    Route::get('/marketing', function () {
        return view('dashboard.marketing');
    });
    Route::get('/nft', function () {
        return view('dashboard.nft');
    });
    Route::get('/saas', function () {
        return view('dashboard.saas');
    });
    Route::get('/real-estate', function () {
        return view('dashboard.real-estate');
    });
    Route::get('/shipment', function () {
        return view('dashboard.shipment');
    });
    Route::get('/finance', function () {
        return view('dashboard.finance');
    });
    Route::get('/pos-system', function () {
        return view('dashboard.pos-system');
    });
    Route::get('/podcast', function () {
        return view('dashboard.podcast');
    });
    Route::get('/social-media', function () {
        return view('dashboard.social-media');
    });
    Route::get('/doctor', function () {
        return view('dashboard.doctor');
    });
    Route::get('/beauty-salon', function () {
        return view('dashboard.beauty-salon');
    });
    Route::get('/store-analysis', function () {
        return view('dashboard.store-analysis');
    });
    Route::get('/restaurant', function () {
        return view('dashboard.restaurant');
    });
    Route::get('/hotel', function () {
        return view('dashboard.hotel');
    });
    Route::get('/real-estate-agent', function () {
        return view('dashboard.real-estate-agent');
    });
    Route::get('/credit-card', function () {
        return view('dashboard.credit-card');
    });
    Route::get('/crypto-trader', function () {
        return view('dashboard.crypto-trader');
    });
    Route::get('/crypto-performance', function () {
        return view('dashboard.crypto-performance');
    });
    Route::get('/to-do-list', function () {
        return view('dashboard.to-do-list');
    });
    Route::get('/calendar', function () {
        return view('dashboard.calendar');
    });
    Route::get('/contacts', function () {
        return view('dashboard.contacts');
    });
    Route::get('/chat', function () {
        return view('dashboard.chat');
    });
    Route::get('/inbox', function () {
        return view('dashboard.inbox');
    });
    Route::get('/compose', function () {
        return view('dashboard.compose');
    });
    Route::get('/read', function () {
        return view('dashboard.read');
    });
    Route::get('/kanban-board', function () {
        return view('dashboard.kanban-board');
    });

    Route::get('/my-drive', function () {
        return view('dashboard.my-drive');
    });

    Route::get('/my-assets', function () {
        return view('dashboard.my-assets');
    });

    Route::get('/my-projects', function () {
        return view('dashboard.my-projects');
    });

    Route::get('/my-personal', function () {
        return view('dashboard.my-personal');
    });

    Route::get('/my-applications', function () {
        return view('dashboard.my-applications');
    });

    Route::get('/my-documents', function () {
        return view('dashboard.my-documents');
    });

    Route::get('/my-media', function () {
        return view('dashboard.my-media');
    });
    Route::get('/my-recent', function () {
        return view('dashboard.my-recent');
    });
    Route::get('/my-important', function () {
        return view('dashboard.my-important');
    });
    Route::get('/products-grid', function () {
        return view('dashboard.products-grid');
    });

    Route::get('/products-list', function () {
        return view('dashboard.products-list');
    });

    Route::get('/product-details', function () {
        return view('dashboard.product-details');
    });

    Route::get('/create-product', function () {
        return view('dashboard.create-product');
    });

    Route::get('/edit-product', function () {
        return view('dashboard.edit-product');
    });

    Route::get('/cart', function () {
        return view('dashboard.cart');
    });

    Route::get('/checkout', function () {
        return view('dashboard.checkout');
    });

    Route::get('/orders', function () {
        return view('dashboard.orders');
    });

    Route::get('/order-details', function () {
        return view('dashboard.order-details');
    });

    Route::get('/create-order', function () {
        return view('dashboard.create-order');
    });

    Route::get('/order-tracking', function () {
        return view('dashboard.order-tracking');
    });

    Route::get('/customers', function () {
        return view('dashboard.customers');
    });

    Route::get('/customer-details', function () {
        return view('dashboard.customer-details');
    });

    Route::get('/categories', function () {
        return view('dashboard.categories');
    });

    Route::get('/sellers', function () {
        return view('dashboard.sellers');
    });

    Route::get('/seller-details', function () {
        return view('dashboard.seller-details');
    });

    Route::get('/create-seller', function () {
        return view('dashboard.create-seller');
    });

    Route::get('/reviews', function () {
        return view('dashboard.reviews');
    });

    Route::get('/refunds', function () {
        return view('dashboard.refunds');
    });

    Route::get('/crm-contacts', function () {
        return view('dashboard.crm-contacts');
    });

    Route::get('/crm-customers', function () {
        return view('dashboard.crm-customers');
    });

    Route::get('/crm-leads', function () {
        return view('dashboard.crm-leads');
    });

    Route::get('/crm-deals', function () {
        return view('dashboard.crm-deals');
    });
    Route::get('/project-overview', function () {
        return view('dashboard.project-overview');
    });

    Route::get('/projects-list', function () {
        return view('dashboard.projects-list');
    });

    Route::get('/create-project', function () {
        return view('dashboard.create-project');
    });

    Route::get('/pm-clients', function () {
        return view('dashboard.pm-clients');
    });

    Route::get('/pm-teams', function () {
        return view('dashboard.pm-teams');
    });

    Route::get('/pm-kanban-board', function () {
        return view('dashboard.pm-kanban-board');
    });

    Route::get('/pm-users', function () {
        return view('dashboard.pm-users');
    });

    Route::get('/courses-list', function () {
        return view('dashboard.courses-list');
    });

    Route::get('/course-details', function () {
        return view('dashboard.course-details');
    });

    Route::get('/lesson-preview', function () {
        return view('dashboard.lesson-preview');
    });

    Route::get('/create-course', function () {
        return view('dashboard.create-course');
    });

    Route::get('/edit-course', function () {
        return view('dashboard.edit-course');
    });

    Route::get('/instructors', function () {
        return view('dashboard.instructors');
    });

    Route::get('/tickets', function () {
        return view('dashboard.tickets');
    });

    Route::get('/ticket-details', function () {
        return view('dashboard.ticket-details');
    });

    Route::get('/agents', function () {
        return view('dashboard.agents');
    });

    Route::get('/reports', function () {
        return view('dashboard.reports');
    });
});