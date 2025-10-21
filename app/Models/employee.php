namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employee extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role', 'status'];

    protected $hidden = ['password'];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function corrections()
    {
        return $this->hasMany(Correction::class);
    }
}
