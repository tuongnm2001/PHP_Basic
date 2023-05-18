<ul>
    <li><a href='index_page_layout.php?page_layout=home'>Home</a></li>
    <li><a href='index_page_layout.php?page_layout=product'>Product</a></li>
    <li><a href='index_page_layout.php?page_layout=contact'>Contact</a></li>
    <li><a href='index_page_layout.php?page_layout=cart'>Cart</a></li>
</ul>

<?php 
    if(isset($_GET['page_layout'])){
        switch ($_GET['page_layout']) {
            case 'home':
                include('home.php');
                break;
            case 'product':
                include('product.php');
                break;
            case 'contact':
                include('contact.php');
                break;
            case 'cart':
                include('cart.php');
                break;
            default:
                echo "404 Not Found" ;
                break;
        }
    }
?>