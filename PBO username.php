class User {
// Properti (atribut) kelas
private $username;
private $email;

// Konstruktor
public function __construct($username, $email) {
$this->username = $username;
$this->email = $email;
}

// Metode (fungsi) untuk mendapatkan username
public function getUsername() {
return $this->username;
}

// Metode untuk mendapatkan email
public function getEmail() {
return $this->email;
}

// Metode untuk mengatur email
public function setEmail($email) {
$this->email = $email;
}

// Metode untuk menampilkan informasi user
public function displayInfo() {
echo "Username: " . $this->username . "<br>";
echo "Email: " . $this->email . "<br>";
}
}

// Membuat objek dari kelas User
$user1 = new User("john_doe", "john@example.com");