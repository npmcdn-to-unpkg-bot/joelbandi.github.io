echo "Status: \n\n\n"
git status -sb
echo "\n\n\n"
echo "Deploying Site to joelbandi.github.io"
git add .
git commit -m "$1"
git push origin master
