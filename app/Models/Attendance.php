namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'date', 'day', 'week', 'clock_in', 'clock_out', 'total_hours'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
