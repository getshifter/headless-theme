PHONY: preview

preview:
	git archive --format=tar HEAD | tar tv -

archive:
	if [ -f headless-theme.zip ] ; then rm -f headless-theme.zip ; fi
	git archive --format=zip HEAD -o headless-theme.zip

