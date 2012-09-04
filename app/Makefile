PAGE_DIR:=pages/
HTML_DIR:=view/pages/
GENERATOR:=rdiscount

PAGES:=$(wildcard $(PAGE_DIR)*.md)
HTMLS:=$(subst md,html,$(subst $(PAGE_DIR),$(HTML_DIR),$(PAGES)))

.PHONY: pages *.html clean

all: pages

%.html:
	rdiscount $(subst $(HTML_DIR),$(PAGE_DIR),$(subst html,md,$@)) > $@

pages: $(HTMLS)

clean:
	rm -f $(HTML_DIR)*.html
