#include <iostream>
#include <windows.h>
#include <stdio.h>
using namespace std;

int a,b,kr;
void xy(short x,short y){
	COORD coord={x,y};
    SetConsoleCursorPosition(GetStdHandle(STD_OUTPUT_HANDLE),coord);
}
void ac(short x,short y, short charASCII){
	xy(x,y);printf("%c",charASCII);
}
void tab(){
	for(a = 31; a<=80;a++);
	{
	ac(a,10,205);
	ac(a,19,205);
}
	ac(31,10,201);
    ac(80,10,187);
    for( b=11;b<=19;b++)
    	ac(31,b,186);
    	ac(80,b,186);
	ac(31,19,200);
	ac(80,19,188);
}
int main(){tab();}

