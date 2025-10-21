namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correction extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id', 'date', 'existing_check_in', 'existing_check_out',
        'requested_check_in', 'requested_check_out', 'reason', 'status'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
