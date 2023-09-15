<nav>
    
   <!--
    <pre>{{ request()->url()}}</pre>
    <pre>{{ request()->path()}}</pre>
    <pre>{{ dump(request()->routeIs('about'))}}</pre>-->
    <ul>
            <li><a href="/" class="{{setActive('home')}}">Home</a></li>
            <li><a href="/about" class="{{setActive('about')}}">About</a></li>
            <li><a href="/portfolio" class="{{setActive('portfolio')}}">Portfolio</a></li>
            <li><a href="/contact" class="{{setActive('contact')}}" >Contact</a></li>
        </ul>
    </nav>