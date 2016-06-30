#include<iostream>
#include<string>

using namespace std;

int main(void) {
	string a, b;
	cin>>a;
	cin>>b;
	cout<<a.size()<<" "<<b.size()<<endl;
	cout<<a+b<<endl;
	cout<<b[0] + a.substr(1)<<" ";
	cout<<a[0] + b.substr(1);
	return 0;

}