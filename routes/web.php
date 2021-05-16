<?php

use App\Http\Controllers\Admin\AboutCompanyController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AboutSectionController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogSectionController;
use App\Http\Controllers\Admin\BreadcrumbController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\CommentSectionController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContactSectionController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ErrorPageController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FaqSectionController;
use App\Http\Controllers\Admin\FixedContentController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GoogleAnalyticController;
use App\Http\Controllers\Admin\HomepageVersionController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\LanguageKeywordController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\SiteImageController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\SkillSectionController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\SolitionController;
use App\Http\Controllers\Admin\SolitionSectionController;
use App\Http\Controllers\Admin\SponsorController;
use App\Http\Controllers\Admin\SponsorSectionController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TeamSectionController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TestimonialSectionController;
use App\Http\Controllers\Admin\WhyChooseController;
use App\Http\Controllers\Admin\WhyChooseSectionController;
use App\Http\Controllers\Admin\WorkCategoryController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\WorkProcessController;
use App\Http\Controllers\Admin\WorkProcessSectionController;
use App\Http\Controllers\Admin\WorkSectionController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\IndustrySectionController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// Start Site Frontend Route
Route::get('/', [HomeController::class, 'index'])->name('homepage')->middleware('XSS');

Route::get('about', [App\Http\Controllers\Frontend\AboutCompanyController::class, 'index'])
    ->name('about-page.index')->middleware('XSS');

Route::get('team', [App\Http\Controllers\Frontend\TeamController::class, 'index'])
    ->name('team-page.index')->middleware('XSS');

Route::get('contact', [App\Http\Controllers\Frontend\ContactController::class, 'index'])
    ->name('contact-page.index')->middleware('XSS');

Route::post('message', [App\Http\Controllers\Frontend\MessageController::class, 'store'])
    ->name('message.store')->middleware('XSS');

Route::middleware(['XSS'])->group(function () {
    Route::get('works', [\App\Http\Controllers\Frontend\WorkController::class, 'index'])->name('work-page.index');
    Route::get('work/{slug}', [App\Http\Controllers\Frontend\WorkController::class, 'show'])->name('work-page.show');
    });

Route::middleware(['XSS'])->group(function () {
    Route::get('blogs', [\App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('blog-page.index');
    Route::get('blog/{slug}', [App\Http\Controllers\Frontend\BlogController::class, 'show'])->name('blog-page.show');
    Route::get('blog/category/{category_name}', [App\Http\Controllers\Frontend\BlogController::class, 'category_show'])->name('blog-category.show');
    Route::post('blog/search', [App\Http\Controllers\Frontend\BlogController::class, 'search'])->name('blog-page.search');
});

Route::get('faq', [App\Http\Controllers\Frontend\FaqController::class, 'index'])
    ->name('faq-page.index')->middleware('XSS');

Route::get('page/{page_slug}', [App\Http\Controllers\Frontend\PageController::class, 'show'])
    ->name('any-page.show')->middleware('XSS');

Route::get('gallery', [App\Http\Controllers\Frontend\GalleryController::class, 'index'])
    ->name('gallery-page.index')->middleware('XSS');

Route::post('comment', [App\Http\Controllers\Frontend\CommentController::class, 'store'])
    ->name('comment.store')->middleware('XSS');
// End Site Frontend Route

// Start Site Admin Route
Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('fixed-content/create', [FixedContentController::class, 'create'])->name('fixed-content.create');
    Route::post('fixed-content', [FixedContentController::class, 'store'])->name('fixed-content.store');
    Route::put('fixed-content/{id}', [FixedContentController::class, 'update'])->name('fixed-content.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('solition/create', [SolitionController::class, 'create'])->name('solition.create');
    Route::post('solition', [SolitionController::class, 'store'])->name('solition.store');
    Route::get('solition/{id}/edit', [SolitionController::class, 'edit'])->name('solition.edit');
    Route::put('solition/{id}', [SolitionController::class, 'update'])->name('solition.update');
    Route::delete('solition/{id}', [SolitionController::class, 'destroy'])->name('solition.destroy');

    Route::post('solition-section', [SolitionSectionController::class, 'store'])->name('solition-section.store');
    Route::put('solition-section/{id}', [SolitionSectionController::class, 'update'])->name('solition-section.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('about', [AboutController::class, 'index'])->name('about.index');
    Route::get('about/create', [AboutController::class, 'create'])->name('about.create');
    Route::post('about', [AboutController::class, 'store'])->name('about.store');
    Route::get('about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
    Route::put('about/{id}', [AboutController::class, 'update'])->name('about.update');
    Route::delete('about/{id}', [AboutController::class, 'destroy'])->name('about.destroy');

    Route::post('about-section', [AboutSectionController::class, 'store'])->name('about-section.store');
    Route::put('about-section/{id}', [AboutSectionController::class, 'update'])->name('about-section.update');

});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('work-process/create', [WorkProcessController::class, 'create'])->name('work-process.create');
    Route::post('work-process', [WorkProcessController::class, 'store'])->name('work-process.store');
    Route::get('work-process/{id}/edit', [WorkProcessController::class, 'edit'])->name('work-process.edit');
    Route::put('work-process/{id}', [WorkProcessController::class, 'update'])->name('work-process.update');
    Route::delete('work-process/{id}', [WorkProcessController::class, 'destroy'])->name('work-process.destroy');

    Route::post('work-process-section', [WorkProcessSectionController::class, 'store'])->name('work-process-section.store');
    Route::put('work-process-section/{id}', [WorkProcessSectionController::class, 'update'])->name('work-process-section.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('industry/create', [IndustryController::class, 'create'])->name('industry.create');
    Route::post('industry', [IndustryController::class, 'store'])->name('industry.store');
    Route::get('industry/{id}/edit', [IndustryController::class, 'edit'])->name('industry.edit');
    Route::put('industry/{id}', [IndustryController::class, 'update'])->name('industry.update');
    Route::delete('industry/{id}', [IndustryController::class, 'destroy'])->name('industry.destroy');

    Route::post('industry-section', [IndustrySectionController::class, 'store'])->name('industry-section.store');
    Route::put('industry-section/{id}', [IndustrySectionController::class, 'update'])->name('industry-section.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('skill/create', [SkillController::class, 'create'])->name('skill.create');
    Route::post('skill', [SkillController::class, 'store'])->name('skill.store');
    Route::get('skill/{id}/edit', [SkillController::class, 'edit'])->name('skill.edit');
    Route::put('skill/{id}', [SkillController::class, 'update'])->name('skill.update');
    Route::delete('skill/{id}', [SkillController::class, 'destroy'])->name('skill.destroy');

    Route::post('skill-section', [SkillSectionController::class, 'store'])->name('skill-section.store');
    Route::put('skill-section/{id}', [SkillSectionController::class, 'update'])->name('skill-section.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create');
    Route::post('testimonial', [TestimonialController::class, 'store'])->name('testimonial.store');
    Route::get('testimonial/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::put('testimonial/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::delete('testimonial/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');

    Route::post('testimonial-section', [TestimonialSectionController::class, 'store'])->name('testimonial-section.store');
    Route::put('testimonial-section/{id}', [TestimonialSectionController::class, 'update'])->name('testimonial-section.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('counter/create', [CounterController::class, 'create'])->name('counter.create');
    Route::post('counter', [CounterController::class, 'store'])->name('counter.store');
    Route::get('counter/{id}/edit', [CounterController::class, 'edit'])->name('counter.edit');
    Route::put('counter/{id}', [CounterController::class, 'update'])->name('counter.update');
    Route::delete('counter/{id}', [CounterController::class, 'destroy'])->name('counter.destroy');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('sponsor/create', [SponsorController::class, 'create'])->name('sponsor.create');
    Route::post('sponsor', [SponsorController::class, 'store'])->name('sponsor.store');
    Route::get('sponsor/{id}/edit', [SponsorController::class, 'edit'])->name('sponsor.edit');
    Route::put('sponsor/{id}', [SponsorController::class, 'update'])->name('sponsor.update');
    Route::delete('sponsor/{id}', [SponsorController::class, 'destroy'])->name('sponsor.destroy');

    Route::post('sponsor-section', [SponsorSectionController::class, 'store'])->name('sponsor-section.store');
    Route::put('sponsor-section/{id}', [SponsorSectionController::class, 'update'])->name('sponsor-section.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('work-category/create', [WorkCategoryController::class, 'create'])->name('work-category.create');
    Route::post('work-category', [WorkCategoryController::class, 'store'])->name('work-category.store');
    Route::get('work-category/{id}/edit', [WorkCategoryController::class, 'edit'])->name('work-category.edit');
    Route::put('work-category/{id}', [WorkCategoryController::class, 'update'])->name('work-category.update');
    Route::delete('work-category/{id}', [WorkCategoryController::class, 'destroy'])->name('work-category.destroy');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('work', [WorkController::class, 'index'])->name('work.index');
    Route::get('work/create', [WorkController::class, 'create'])->name('work.create');
    Route::post('work', [WorkController::class, 'store'])->name('work.store');
    Route::get('work/{id}/edit', [WorkController::class, 'edit'])->name('work.edit');
    Route::put('work/{id}', [WorkController::class, 'update'])->name('work.update');
    Route::delete('work/{id}', [WorkController::class, 'destroy'])->name('work.destroy');

    Route::post('work-section', [WorkSectionController::class, 'store'])->name('work-section.store');
    Route::put('work-section/{id}', [WorkSectionController::class, 'update'])->name('work-section.update');

    Route::get('work-item/{id}/create', [WorkController::class, 'create_item'])->name('work.create_item');
    Route::post('work-item/{id}', [WorkController::class, 'store_item'])->name('work.store_item');
    Route::get('work-item/{work_id}/{id}/edit', [WorkController::class, 'edit_item'])->name('work.edit_item');
    Route::put('work-item/{id}', [WorkController::class, 'update_item'])->name('work.update_item');
    Route::delete('work-item/{id}', [WorkController::class, 'destroy_item'])->name('work.destroy_item');

    Route::get('work-step/{id}/create', [WorkController::class, 'create_step'])->name('work.create_step');
    Route::post('work-step/{id}', [WorkController::class, 'store_step'])->name('work.store_step');
    Route::get('work-step/{work_id}/{id}/edit', [WorkController::class, 'edit_step'])->name('work.edit_step');
    Route::put('work-step/{id}', [WorkController::class, 'update_step'])->name('work.update_step');
    Route::delete('work-step/{id}', [WorkController::class, 'destroy_step'])->name('work.destroy_step');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('about-company/create', [AboutCompanyController::class, 'create'])->name('about-company.create');
    Route::post('about-company', [AboutCompanyController::class, 'store'])->name('about-company.store');
    Route::put('about-company/{id}', [AboutCompanyController::class, 'update'])->name('about-company.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('why-choose/create', [WhyChooseController::class, 'create'])->name('why-choose.create');
    Route::post('why-choose', [WhyChooseController::class, 'store'])->name('why-choose.store');
    Route::get('why-choose/{id}/edit', [WhyChooseController::class, 'edit'])->name('why-choose.edit');
    Route::put('why-choose/{id}', [WhyChooseController::class, 'update'])->name('why-choose.update');
    Route::delete('why-choose/{id}', [WhyChooseController::class, 'destroy'])->name('why-choose.destroy');

    Route::post('why-choose-section', [WhyChooseSectionController::class, 'store'])->name('why-choose-section.store');
    Route::put('why-choose-section/{id}', [WhyChooseSectionController::class, 'update'])->name('why-choose-section.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('team/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('team', [TeamController::class, 'store'])->name('team.store');
    Route::get('team/{id}/edit', [TeamController::class, 'edit'])->name('team.edit');
    Route::put('team/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::delete('team/{id}', [TeamController::class, 'destroy'])->name('team.destroy');

    Route::post('team-section', [TeamSectionController::class, 'store'])->name('team-section.store');
    Route::put('team-section/{id}', [TeamSectionController::class, 'update'])->name('team-section.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('category/create', [CategoryController::class, 'create'])->name('blog-category.create');
    Route::post('category', [CategoryController::class, 'store'])->name('blog-category.store');
    Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('blog-category.edit');
    Route::put('category/{id}', [CategoryController::class, 'update'])->name('blog-category.update');
    Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('blog-category.destroy');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('blog/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

    Route::post('blog-section', [BlogSectionController::class, 'store'])->name('blog-section.store');
    Route::put('blog-section/{id}', [BlogSectionController::class, 'update'])->name('blog-section.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('gallery', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('gallery/{id}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
});


Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('faq/create', [FaqController::class, 'create'])->name('faq.create');
    Route::post('faq', [FaqController::class, 'store'])->name('faq.store');
    Route::get('faq/{id}/edit', [FaqController::class, 'edit'])->name('faq.edit');
    Route::put('faq/{id}', [FaqController::class, 'update'])->name('faq.update');
    Route::delete('faq/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');

    Route::post('faq-section', [FaqSectionController::class, 'store'])->name('faq-section.store');
    Route::put('faq-section/{id}', [FaqSectionController::class, 'update'])->name('faq-section.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('site-info/create', [SiteInfoController::class, 'create'])->name('site-info.create');
    Route::post('site-info', [SiteInfoController::class, 'store'])->name('site-info.store');
    Route::put('site-info/{id}', [SiteInfoController::class, 'update'])->name('site-info.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('site-image/create', [SiteImageController::class, 'create'])->name('site-image.create');
    Route::post('site-image', [SiteImageController::class, 'store'])->name('site-image.store');
    Route::put('site-image/{id}', [SiteImageController::class, 'update'])->name('site-image.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('homepage-version/create', [HomepageVersionController::class, 'create'])->name('homepage-version.create');
    Route::put('homepage-version/{id}', [HomepageVersionController::class, 'update'])->name('homepage-version.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('google-analytic/create', [GoogleAnalyticController::class, 'create'])->name('google-analytic.create');
    Route::post('google-analytic', [GoogleAnalyticController::class, 'store'])->name('google-analytic.store');
    Route::put('google-analytic/{id}', [GoogleAnalyticController::class, 'update'])->name('google-analytic.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('breadcrumb/create', [BreadcrumbController::class, 'create'])->name('breadcrumb.create');
    Route::post('breadcrumb', [BreadcrumbController::class, 'store'])->name('breadcrumb.store');
    Route::put('breadcrumb/{id}', [BreadcrumbController::class, 'update'])->name('breadcrumb.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('section/create',  [SectionController::class, 'create'])->name('section.create');
    Route::patch('section/{id}',  [SectionController::class, 'update'])->name('section.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('seo/create', [SeoController::class, 'create'])->name('seo.create');
    Route::post('seo', [SeoController::class, 'store'])->name('seo.store');
    Route::put('seo/{id}', [SeoController::class, 'update'])->name('seo.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('color/create', [ColorController::class, 'create'])->name('color.create');
    Route::post('color', [ColorController::class, 'store'])->name('color.store');
    Route::put('color/{id}', [ColorController::class, 'update'])->name('color.update');
    Route::delete('color/{id}', [ColorController::class, 'destroy'])->name('color.destroy');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
    Route::get('contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('contact/{id}', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

    Route::post('contact-section', [ContactSectionController::class, 'store'])->name('contact-section.store');
    Route::put('contact-section/{id}', [ContactSectionController::class, 'update'])->name('contact-section.update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('social/create', [SocialController::class, 'create'])->name('social.create');
    Route::post('social', [SocialController::class, 'store'])->name('social.store');
    Route::get('social/{id}/edit', [SocialController::class, 'edit'])->name('social.edit');
    Route::put('social/{id}', [SocialController::class, 'update'])->name('social.update');
    Route::patch('social/update_status/{id}', [SocialController::class, 'update_status'])->name('social.update_status');
    Route::delete('social/{id}', [SocialController::class, 'destroy'])->name('social.destroy');
});

Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->group(function () {
    Route::get('message', [MessageController::class, 'index'])->name('message.index');
    Route::put('message/{id}', [MessageController::class, 'update'])->name('message.update');
    Route::patch('message/mark_all', [MessageController::class, 'mark_all_read_update'])->name('message.mark_all_read_update');
    Route::delete('message/{id}', [MessageController::class, 'destroy'])->name('message.destroy');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('page', [PageController::class, 'index'])->name('page.index');
    Route::get('page/create', [PageController::class, 'create'])->name('page.create');
    Route::post('page', [PageController::class, 'store'])->name('page.store');
    Route::get('page/{id}/edit', [PageController::class, 'edit'])->name('page.edit');
    Route::put('page/{id}', [PageController::class, 'update'])->name('page.update');
    Route::delete('page/{id}', [PageController::class, 'destroy'])->name('page.destroy');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('comment', [CommentSectionController::class, 'index'])->name('comment-section.index');
    Route::put('comment/{id}', [CommentSectionController::class, 'update'])->name('comment-section.update');
    Route::patch('comment/mark_all', [CommentSectionController::class, 'mark_all_approval_update'])->name('comment-section.mark_all_approval_update');
    Route::delete('comment/{id}', [CommentSectionController::class, 'destroy'])->name('comment-section.destroy');
});
// End Landing Site Admin Route



Route::middleware(['auth:sanctum', 'verified', 'XSS'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('profile/change-password', [ProfileController::class, 'change_password_edit'])->name('profile.change_password_edit');
    Route::put('profile/change-password/update', [ProfileController::class, 'change_password_update'])->name('profile.change_password_update');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('language/create', [LanguageController::class, 'create'])->name('language.create');
    Route::post('language', [LanguageController::class, 'store'])->name('language.store');
    Route::get('language/{id}/edit', [LanguageController::class, 'edit'])->name('language.edit');
    Route::patch('language/language-select', [LanguageController::class, 'update_language'])->name('language.update_language');
    Route::patch('language/processed-language', [LanguageController::class, 'update_processed_language'])->name('language.update_processed_language');
    Route::put('language/{id}', [LanguageController::class, 'update'])->name('language.update');
    Route::patch('language/update_display_dropdown/{id}', [LanguageController::class, 'update_display_dropdown'])->name('language.update_display_dropdown');
    Route::delete('language/{id}', [LanguageController::class, 'destroy'])->name('language.destroy');
});

Route::get('language/set-locale/{language_id}', [LanguageController::class, 'set_locale'])
    ->name('language.set_locale')->middleware('XSS');


Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {

    Route::get('language-keyword-for-adminpanel/create/{id}', [LanguageKeywordController::class, 'create'])
        ->name('language-keyword-for-adminpanel.create');
    Route::get('language-keyword-for-frontend/frontend-create/{id}', [LanguageKeywordController::class, 'frontend_create'])
        ->name('language-keyword-for-frontend.frontend_create');

    Route::post('content-one-group-keyword', [LanguageKeywordController::class, 'store_content_one_group_keyword'])->name('content-one-group-keyword.store_content_one_group_keyword');
    Route::put('content-one-group-keyword/{id}', [LanguageKeywordController::class, 'update_content_one_group_keyword'])->name('content-one-group-keyword.update_content_one_group_keyword');

    Route::post('content-two-group-keyword', [LanguageKeywordController::class, 'store_content_two_group_keyword'])->name('content-two-group-keyword.store_content_two_group_keyword');
    Route::put('content-two-group-keyword/{id}', [LanguageKeywordController::class, 'update_content_two_group_keyword'])->name('content-two-group-keyword.update_content_two_group_keyword');

    Route::post('content-three-group-keyword', [LanguageKeywordController::class, 'store_content_three_group_keyword'])->name('content-three-group-keyword.store_content_three_group_keyword');
    Route::put('content-three-group-keyword/{id}', [LanguageKeywordController::class, 'update_content_three_group_keyword'])->name('content-three-group-keyword.update_content_three_group_keyword');

    Route::post('content-four-group-keyword', [LanguageKeywordController::class, 'store_content_four_group_keyword'])->name('content-four-group-keyword.store_content_four_group_keyword');
    Route::put('content-four-group-keyword/{id}', [LanguageKeywordController::class, 'update_content_four_group_keyword'])->name('content-four-group-keyword.update_content_four_group_keyword');

    Route::post('content-five-group-keyword', [LanguageKeywordController::class, 'store_content_five_group_keyword'])->name('content-five-group-keyword.store_content_five_group_keyword');
    Route::put('content-five-group-keyword/{id}', [LanguageKeywordController::class, 'update_content_five_group_keyword'])->name('content-five-group-keyword.update_content_five_group_keyword');

    Route::post('content-six-group-keyword', [LanguageKeywordController::class, 'store_content_six_group_keyword'])->name('content-six-group-keyword.store_content_six_group_keyword');
    Route::put('content-six-group-keyword/{id}', [LanguageKeywordController::class, 'update_content_six_group_keyword'])->name('content-six-group-keyword.update_content_six_group_keyword');

    Route::post('frontend-one-group-keyword', [LanguageKeywordController::class, 'store_frontend_one_group_keyword'])->name('frontend-one-group-keyword.store_frontend_one_group_keyword');
    Route::put('frontend-one-group-keyword/{id}', [LanguageKeywordController::class, 'update_frontend_one_group_keyword'])->name('frontend-one-group-keyword.update_frontend_one_group_keyword');

    Route::post('frontend-two-group-keyword', [LanguageKeywordController::class, 'store_frontend_two_group_keyword'])->name('frontend-two-group-keyword.store_frontend_two_group_keyword');
    Route::put('frontend-two-group-keyword/{id}', [LanguageKeywordController::class, 'update_frontend_two_group_keyword'])->name('frontend-two-group-keyword.update_frontend_two_group_keyword');


    Route::get('language-keyword-for-frontend/create/{id}', [LanguageKeywordController::class, 'create_frontend'])
        ->name('language-keyword-frontend.create_frontend');

});

Route::get('register', function () {
    return redirect()->route('homepage');
});

Route::middleware(['auth:sanctum', 'verified', 'XSS'])->prefix('admin')->group(function () {
    Route::get('clear-cache', function() {
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        return redirect()->route('dashboard')
            ->with('success', 'content.created_successfully');
    });
});

Route::any('{catchall}', [ErrorPageController::class, 'not_found'])->where('catchall', '.*');

