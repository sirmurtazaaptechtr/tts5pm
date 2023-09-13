<?php 
    include('include/header.php');
    require('include/functions.php');

    $students = [
        1 => ['name' => 'Shoaib', 'gender' => 'male', 'dob' => '4-Feb-2004'],
        2 => ['name' => 'Moiz', 'gender' => 'male', 'dob' => '26-Nov-2001'],
        3 => ['name' => 'Hiba', 'gender' => 'female', 'dob' => '6-Jul-2006'],
        4 => ['name' => 'Arbaz', 'gender' => 'male', 'dob' => '31-Aug-2005'],
        5 => ['name' => 'Affan', 'gender' => 'male', 'dob' => '10-Mar-2006'],
        6 => ['name' => 'Junaid', 'gender' => 'male', 'dob' => '29-Dec-2006'],
    ];
?>
<h1>About Page</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, sed consequatur fuga dolorum iusto autem provident saepe reprehenderit animi ratione error inventore fugiat, dolor doloribus. Molestias, iusto nihil quam corporis cumque ipsum corrupti accusamus repudiandae? Perspiciatis mollitia voluptatibus unde dicta, suscipit consectetur a blanditiis, impedit magni consequuntur quidem autem, ad nesciunt totam provident fugit numquam veritatis minima officia dolor! Quasi nihil dolor veniam cupiditate harum quam veritatis animi, dolorum, voluptas reprehenderit iusto ipsa repellat velit. Doloremque, nisi ipsum vel, eos reiciendis non atque ex nihil deleniti dolores magni, voluptatem possimus corporis aspernatur eum esse. Veritatis magni quidem obcaecati perferendis debitis magnam minima, perspiciatis reiciendis ullam dignissimos libero, reprehenderit nemo sequi error nesciunt quae ipsam voluptates totam consequuntur voluptatem voluptatibus iure ducimus amet? Praesentium dolorem, iure beatae accusamus voluptates pariatur eius neque repudiandae. </p>
    <p>Ut dolores quam dignissimos aperiam fuga, asperiores totam exercitationem nam incidunt quae beatae porro eius, praesentium recusandae odit! Tempora culpa tenetur voluptatibus pariatur veritatis ipsum quasi beatae optio inventore ratione sunt, nobis provident incidunt ex quis nulla doloremque autem eaque distinctio repudiandae minima sint ab! Facilis porro facere dolor officiis corrupti, consequuntur repellat vel fugit similique, tempore quibusdam. Eligendi laborum sint quis expedita dolorum dolorem vel, nostrum neque.</p>
<?php
    pr($students);

    include('include/footer.php');
?>