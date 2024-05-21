<footer>
    <div class="footer_container">
        <div class="footer_nav d-flex align-center justify-content-center">
            <ul class="link_list d-flex gap-3 mb-0 list-unstyled ">
                <li>
                    <a href="{{ route('chi-siamo') }}">chi siamo</a>
                </li>
                <li>
                    <a href="{{ route('privacy') }}">privacy policy</a>
                </li>
                <li>
                    <a href="{{ route('contatti') }}">contatti</a>
                </li>
            </ul>
        </div>
    </div>
</footer>

<style>

footer{
    background-color: #212529;
    color: white;
}

.footer_nav{
    height: 100px;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
}
</style>