PHONY: preview

preview:
	git archive --format=tar HEAD | tar tv -
