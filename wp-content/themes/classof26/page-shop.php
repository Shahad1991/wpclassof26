<?php get_header(); ?>

<main>
    <h1>Shop</h1>

    <div class="product-grid">
        <?php
        // Manually define products with image URLs
        $products = array(
            array(
                'title' => 'Product 1',
                'image' => 'http://localhost:8888/wpclassof26/wp-content/uploads/2025/03/taske-scaled.jpg'
            ),
            array(
                'title' => 'Product 2',
                'image' => 'http://localhost:8888/wpclassof26/wp-content/uploads/2025/03/ring8-scaled.jpg'
            ),
            array(
                'title' => 'Product 3',
                'image' => 'http://localhost:8888/wpclassof26/wp-content/uploads/2025/03/ring7-scaled.jpg'
            ),
            array(
                'title' => 'Product 4',
                'image' => 'http://localhost:8888/wpclassof26/wp-content/uploads/2025/03/ring6-scaled.jpg'
            ),
            array(
                'title' => 'Product 5',
                'image' => 'http://localhost:8888/wpclassof26/wp-content/uploads/2025/03/ring3-scaled.jpg'
            ),
            array(
                'title' => 'Product 6',
                'image' => 'http://localhost:8888/wpclassof26/wp-content/uploads/2025/03/ring2-scaled.jpg'
            ),
            array(
                'title' => 'Product 7',
                'image' => 'http://localhost:8888/wpclassof26/wp-content/uploads/2025/03/ring1-scaled.jpg'
            ),
            array(
                'title' => 'Product 8',
                'image' => 'http://localhost:8888/wpclassof26/wp-content/uploads/2025/03/ring-scaled.jpg'
            ),
        );

        foreach ($products as $product) :
            ?>
            <div class="product">
                <img src="<?php echo esc_url($product['image']); ?>" alt="<?php echo esc_attr($product['title']); ?>">
                <h2><?php echo esc_html($product['title']); ?></h2>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php get_footer(); ?>
