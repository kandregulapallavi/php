#include<stdio.h>
#include<conio.h>
#define max 100

char stack [max];
int top= -1;

void push(char c)
{
	if(top<max-1)
	{
	//stack[++top]=c;
	top++;
	stack[top]=c;
	}
}
char pop()
{
	if(top>=0)
	{
	return stack[top--];
	}
	return'\0';
}
void main()
{
	char str[max];
	int i=0;
	clrscr();
	printf("enter a string:");
	scanf("%s",str);

	while(str[i]!='\0')
	{
	push(str[i]);
	i++;
	}
	while(top>=0)
	{
	printf("%c",pop());
	}
	getch();
}