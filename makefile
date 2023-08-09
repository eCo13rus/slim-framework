start:
	php -S localhost:8080 -t public public/index.php
push:
	git add .
	git commit -m 'Add'
	git push origin main	