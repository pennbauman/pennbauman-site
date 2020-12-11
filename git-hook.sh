#!/bin/sh
# Setup git hooks

echo "#!/bin/sh" > ./.git/hooks/post-receive

venv_path=$HOME/virtualenv/$(pwd | sed 's/.*\///')/3.8/bin/activate
echo "source $venv_path" >> ./.git/hooks/post-receive

echo "" >> ./.git/hooks/post-receive
echo "cd \$GIT_DIR/../" >> ./.git/hooks/post-receive
echo "" >> ./.git/hooks/post-receive
echo "echo \"\"" >> ./.git/hooks/post-receive
echo "python ./build.py" >> ./.git/hooks/post-receive
echo "echo \"\"" >> ./.git/hooks/post-receive
