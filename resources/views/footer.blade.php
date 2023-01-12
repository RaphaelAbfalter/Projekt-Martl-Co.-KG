<style>
    #footer {
        text-align: center;
        padding: 3px;
        position: fixed;
        color: white;
        bottom: 0;
        width: 100%;
        height: 60px;   /* Height of the footer */
        display: flex;
    }
    #a {
        color: white;
    }

</style>

<div id="footer" class="bg-dark">
    <a class="nav-link" href="{{ route('contact') }}">Kontakt</a>
    <a class="nav-link" href="{{ route('login') }}">Newsletter</a>
</div>

<!--
<footer class="bg-dark">
    <p>Firma: {{ config('app.name') }} <br>
        <div>
        </div>
</footer>
-->
