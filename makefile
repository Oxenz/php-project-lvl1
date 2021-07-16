install:
	composer install
brain-games:
	php bin/brain-games
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even:
	php bin/brain-even