<?php

require '../loader/autoloader.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        
        case 'search':
            extract($_POST);
            $s = new Search();


            $response = $s->basic('docs',$search,['title','sub']);

            if($response ==[]){
                echo '<div  x-cloak class="mt-8 pb-32">
                <div> No matching result</div>
            </div>';
            }
            else{
                foreach ($response as $row){
                    echo ' <a class="search-result -mx-2 block p-3 text-gray-400 transition-colors duration-200 focus:outline-none focus:bg-dark-800 focus:text-gray-200 hover:text-gray-200" href="'.$row['link'].'">
                    <div class="text-sm font-medium" >'.$row['title'].'</div>
                    <div class="mt-2">
                        <div class="text-sm">
                            <span class="text-red-600 opacity-75"><></span> <span>'.$row['sub'].'</span>
                        </div>
     
     
     
                        
                    </div>
                </a>';
                 }
            }

            

            break;
        
        default:

        break;
    }
}
