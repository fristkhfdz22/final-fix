
 <div class="home">
<div class="marquee-section" style="margin-top: 60px;">
    <marquee behavior="scroll" direction="left" class="marquee-text" style="line-height: 50px;">
        <span class="marquee-text">Welcome to Our School Website | Stay Informed with the Latest Updates!</span>
        <span class="marquee-text">Welcome to Our School Website | Stay Informed with the Latest Updates!</span>
        <span class="marquee-text">Welcome to Our School Website | Stay Informed with the Latest Updates!</span>

      
    </marquee>
</div>

        <img src="<?php echo base_url('template/assets/img/pp smk3.jpg'); ?>" alt="">
        <div class="search-container">
            <h1 style="font-size: 55px;">SMK NEGERI 1 SLAWI</h1>
            <br>
            <div class="search-bar">
    <input type="text" class="search-input" placeholder="Apa yang ingin anda cari?" id="searchQuery">
    <button class="search-button" onclick="redirectTo404()">Cari</button>
</div>

<script>
function redirectTo404() {
    window.location.href = "<?php echo site_url('errors/page_missing'); ?>";
}
</script>

        </div>
        
    </div>