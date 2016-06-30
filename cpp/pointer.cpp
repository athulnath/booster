#include<iostream>
#include<cstdio>

void update(int* a, int* b) {
	int tmp = *a - *b;
	*a = *a + *b;
	*b = tmp < 0 ? (tmp * -1) : tmp;
}

int main() {
	int a, b;
	scanf("%d", &a);
	scanf("%d", &b);
	update(&a, &b);
	printf("%d\n", a);
	printf("%d\n", b);
	return 0;
}