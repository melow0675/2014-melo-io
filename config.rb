# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "wp-content/themes/melo-io/css"
sass_dir = "wp-content/themes/melo-io/sass"
images_dir = "wp-content/themes/melo-io/img"
javascripts_dir = "wp-content/themes/melo-io/js"
fonts_dir = "wp-content/themes/melo-io/fonts"

output_style = :nested

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false
color_output = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
preferred_syntax = :scss

require 'fileutils'
on_stylesheet_saved do |file|
	if File.exists?(file) && File.basename(file) == "style.css"
		puts "Moving: #{file}"
		FileUtils.mv(file, File.dirname(file) + "/../" + File.basename(file))
	end
end