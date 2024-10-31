use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/resume', [ResumeController::class, 'show']);

