echo "enter a number: "
read a

echo "number 2: "
read b

if [ "$a" -gt "$b" ]; then
	echo "a is greater"
else
 	echo "b is greater"
fi
