#include<iostream>
#include<vector>

using namespace std;

int main(void) {
	vector<int> v;
	int n, tmp, erasePos, eraseBeg, eraseEnd; 

	cin>>n;
	for(unsigned int i = 0; i < n; i++) {
		cin>>tmp;
		v.push_back(tmp);
	}

	
	v.erase(v.begin()+erasePos);
	cin>>erasePos;
	erasePos--;
	cin>>eraseBeg;
    eraseBeg--;
	cin>>eraseEnd;
    eraseEnd--;
	v.erase(v.begin()+eraseBeg, v.begin()+eraseEnd);

	cout<<v.size()<<endl;
	for(unsigned int i = 0; i< v.size(); i++) {
		cout<<v[i]<<" ";
	}

	return 0;
}