#include <stdio.h>
#include <stdlib.h>

struct node {
    int key;
    struct node *left, *right;
};

struct node* newNode(int item){
    struct node* temp = (struct node*)malloc(sizeof(struct node));
    temp->key = item;
    temp->left = temp->right = NULL;
    return temp;
}

void inorder(struct node* root)
{
    if (root != NULL){
        inorder(root->left);
        printf("%d ", root->key);
        inorder(root->right);
    }
}

struct node* insert(struct node* node, int key)
{
    if (node == NULL)
        return newNode(key);

    if (key < node->key)
        node->left = insert(node->left, key);
    else if (key < node->key)
        node->right = insert(node->right,key);
    return node;
}
int main()
{
    int arr[10],i,j,n;
    printf("Enter the size:");
    scanf("%d",&n);
    printf("enter the element");
    for(i=0;i<n;i++)
    {
       scanf("%d",&arr[i]);
    }


    struct node* root = NULL;
    j=1;
    
    while(j<n)
    {
        root = insert(root, arr[0]);
        insert(root, arr[j]);
        j++;
    }
    inorder(root);
    return 0;

}

