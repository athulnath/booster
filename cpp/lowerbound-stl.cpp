#include<iostream>
#include<vector>
#include<algorithm>

using namespace std;

int main(void) {
	vector<long int> input, query;
	vector<long int>::iterator lower, upper, tmpIt;
	long int n, tmp,q;
	cin>>n;
	for(int i = 0; i < n; i++) {
		cin>>tmp;
		input.push_back(tmp);
	}
	cin>>q;
	for(int i = 0; i < q; i++) {
		cin>>tmp;
		query.push_back(tmp);
	}

cout<<"running....."<<endl;
	for(int i = 0; i < q; i++) {
		tmpIt = find(input.begin(), input.end(), query[i]);
		if( tmpIt != input.end()) {
			cout<<"Yes "<<tmpIt - input.begin() + 1<<endl;
		} else {
			lower = lower_bound(input.begin(), input.end(), query[i]);
			if(lower != input.end()) {
				cout<<"No "<<lower - input.begin() + 1<<endl;
			}
		}		 
	}

	return 0;
}