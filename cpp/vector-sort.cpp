#include<iostream>
#include<vector>
#include<sstream>
#include<algorithm>

using namespace std;


int main(void) {

	vector<int> v;
	vector<int>::iterator p;

	int n, tmp;
	cin>>n;
	for(unsigned int i = 0; i < n; i++) {
		cin>>tmp;
		v.push_back(tmp);
	}

	sort(v.begin(), v.end());
	p = v.begin();
	while(p != v.end()) {
		cout<<*p<<" ";
		p++;
	}
	return 0;
}