Q1 >
Laravel's query builder is a fluent and expressive way to build and execute database queries in Laravel. It provides a simple and elegant interface for interacting with databases by allowing you to construct queries using chainable methods.
The query builder abstracts the underlying database engine, allowing you to write database-agnostic code. It supports multiple database systems, such as MySQL, PostgreSQL, SQLite, and SQL Server, among others.
Here are some key features and benefits of Laravel's query builder:
Fluent and expressive syntax: 
Parameter binding:
Database agnostic: 
Query building methods: 
Eloquent integration:
Readability and maintainability:
Integration with other Laravel features: 

Q2 >
$posts = DB::table('posts')
    ->select('excerpt', 'description')
    ->get();

print_r($posts);

Q3 >
$uniqueNames = DB::table('users')
                ->select('name')
                ->distinct()
                ->get();

Q4 >
$posts = DB::table('posts')
    ->where('id', 2)
    ->first();

if ($posts) {
    echo $posts->description;
} else {
    echo "No post found.";
}

Q5 >
$posts = DB::table('posts')
    ->where('id', 2)
    ->pluck('description');

print_r($posts);

Q6 >
$user = DB::table('users')->where('status', 'active')->first();
$user = DB::table('users')->find(1);

Q7 >
$posts = DB::table('posts')
    ->pluck('title');

print_r($posts);

Q8 >
$result = DB::table('posts')->insert([
    'title' => 'X',
    'slug' => 'X',
    'excerpt' => 'excerpt',
    'description' => 'description',
    'is_published' => true,
    'min_to_read' => 2
]);

print_r($result);

Q9 >
$result = DB::table('posts')->insert([
    'title' => 'X',
    'slug' => 'X',
    'excerpt' => 'excerpt',
    'description' => 'description',
    'is_published' => true,
    'min_to_read' => 2
]);

print_r($result);

Q10 >
$affectedRows = DB::table('posts')
    ->where('id', '=', 3)
    ->delete();

echo "Number of affected rows: " . $affectedRows;

Q11 >

$totalUsers = DB::table('users')->count();
$activeUsers = DB::table('users')->where('status', 'active')->count();
$totalSales = DB::table('sales')->sum('amount');
$averageRating = DB::table('reviews')->avg('rating');
$highestPrice = DB::table('products')->max('price');
$lowestStock = DB::table('products')->min('stock');

Q12 >

$users = DB::table('users')
    ->whereNot('status', 'active')
    ->get();
$users = DB::table('users')
    ->whereNotIn('role', ['admin', 'superadmin'])
    ->get();

Q13 >
$exists = DB::table('users')->where('status', 'active')->exists();
$doesntExist = DB::table('users')->where('status', 'deleted')->doesntExist();

Q14 >
$posts = DB::table('posts')
    ->whereBetween('min_to_read', [1, 5])
    ->get();

print_r($posts);

Q15 >
$affectedRows = DB::table('posts')
    ->where('id', 3)
    ->increment('min_to_read');

echo "Number of affected rows: " . $affectedRows;



