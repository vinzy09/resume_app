use Illuminate\Support\Facades\Route;

Route::get('/resume', function () {
    return view('resumes.index'); // Ensure the path matches your file structure
});

