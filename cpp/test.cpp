#include<iostream>
#include<sstream>

using namespace std;

int main(void) {
	stringstream ss("asdfsadf");

	string str = ss.str();

	cout<<str<<endl;

	int i = 777;
	double d = 3.14;
	ss<<"New data"<<i<<d;


	cout<<str<<i<<d;
	cout<<endl;
}