# namespace :assets do
#   task :precompile do
#     sh 'middleman build'
#   end
# end

desc "Build the website from source"
task :build do
  puts "## Building website"
  status = system("middleman build --clean")
  puts status ? "OK" : "FAILED"
end