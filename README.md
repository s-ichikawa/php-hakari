```
$hakari = new Hakari();

$hakari->run(function () {
    $z = [];
    $x = range(1, 100000);
    foreach ($x as $y) {
        $z[] = $y;
    }
    unset($x);
    unset($z);
});

$hakari->display();

/*
 * |elapsed time | 43ms
 * |memory peak  | 24.25Mb
 * |memory usage | 768.00Kb
 */


var_dump($hakari->json());

/*
 * string(73) "{"elapsed_time":"43ms","memory_peak":"24.25Mb","memory_usage":"768.00Kb"}"
 */
```