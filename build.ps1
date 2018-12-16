$name = 'Curie';

$from = 'D:\Workspace\'
$to = 'D:\xampp\htdocs\'

# Remove Directory
$fromEntire = "$from$name"
$toEntire = "$to$name\"

write-output "$toEntire"
write-output "Deleted: $toEntire"

rm -r -fo $toEntire

# Make the directory
write-output "Copying Directory From : $fromEntire, To : $to"
cp -R $fromEntire $to

write-output "Completed"