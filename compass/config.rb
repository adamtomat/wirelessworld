# Require any additional compass plugins here.

sass_dir = "scss"

# Set this to the root of your project when deployed:
http_path = "/"

css_dir = "../web/css"
http_stylesheets_path = "/css"

images_dir = "../web/images"
http_images_path = "/images"

# generated_images_path = "../public/images"
http_generated_images_path = "/images"

javascripts_dir = "../web/js"

add_import_path "../web/bower_components/foundation/scss/"

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets = false

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass