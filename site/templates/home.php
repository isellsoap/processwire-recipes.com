{{ page.renderChunk('partials/header.php') }}

<div class="col-50">
	<h2 class="page-headline">{{ headline }}</h2>

	{{ body }}

	<a href="https://github.com/processwire-recipes/Recipes" class="btn btn-default" target="_blank"><i class="fa fa-github-square"></i> Contribute via Pull Request on GitHub</a>
</div>

<div class="col-50">

	<div class="module module-recipelist">
		<h3>Recent Recipes</h3>

		<ul class="module-recipelist__list">
			{% for r in recipes %}
				<li class="module-recipelist__listitem"><a href="{{ r.url }}">{{ r.title }}</a></li>
			{% endfor %}
		</ul>

	</div>

	<div class="module module-taglist">
		<h3>Recent Tags</h3>

		<ul>
			{% for t in tags %}
				<li><a href="{{ t.url }}">{{ t.title }}</a> </li>
			{% endfor %}
		</ul>
	</div>

</div>

{{ page.renderChunk('partials/footer.php') }}

