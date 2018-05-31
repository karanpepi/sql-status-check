
#!/bin/bash
UP=$(pgrep mysql | wc -l);
if [ "$UP" -ne 1 ];
then
        echo "0";
        sudo service mysql start

else
        echo "1";
fi
