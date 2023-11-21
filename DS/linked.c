#include <stdio.h>
#include <stdlib.h>

// Define a structure for a node in the linked list
struct Node
{
    int data;
    struct Node *next;
};

// Function to create a new node with the given data
struct Node *createNode(int data)
{
    struct Node *newNode = (struct Node *)malloc(sizeof(struct Node));
    newNode->data = data;
    newNode->next = NULL;
    return newNode;
}

// Function to print the linked list
void printList(struct Node *head)
{
    struct Node *current = head;
    while (current != NULL)
    {
        printf("%d -> ", current->data);
        current = current->next;
    }
    printf("NULL\n");
}

// Function to insert a node at the beginning of the list
struct Node *insertAtHead(struct Node *head, int data)
{
    struct Node *newNode = createNode(data);
    newNode->next = head;
    return newNode;
}

// Function to insert a node at a specific position in the list
struct Node *insertAtPosition(struct Node *head, int data, int position)
{
    struct Node *newNode = createNode(data);

    if (position == 1)
    {
        newNode->next = head;
        return newNode;
    }

    struct Node *current = head;
    for (int i = 1; i < position - 1 && current != NULL; i++)
    {
        current = current->next;
    }

    if (current == NULL)
    {
        printf("Invalid position, insertion not possible.\n");
        free(newNode);
        return head;
    }

    newNode->next = current->next;
    current->next = newNode;
    return head;
}

// Function to insert a node at the end of the list
struct Node *insertAtEnd(struct Node *head, int data)
{
    struct Node *newNode = createNode(data);

    if (head == NULL)
    {
        return newNode;
    }

    struct Node *current = head;
    while (current->next != NULL)
    {
        current = current->next;
    }

    current->next = newNode;
    return head;
}

int main()
{
    struct Node *head = NULL;
    int choice, data, position;

    do
    {
        printf("1. Insert at head\n");
        printf("2. Insert at position\n");
        printf("3. Insert at end\n");
        printf("4. Print list\n");
        printf("0. Exit\n");
        printf("Enter your choice: ");
        scanf("%d", &choice);

        switch (choice)
        {
        case 1:
            printf("Enter the value to insert at head: ");
            scanf("%d", &data);
            head = insertAtHead(head, data);
            break;
        case 2:
            printf("Enter the value to insert: ");
            scanf("%d", &data);
            printf("Enter the position to insert at: ");
            scanf("%d", &position);
            head = insertAtPosition(head, data, position);
            break;
        case 3:
            printf("Enter the value to insert at end: ");
            scanf("%d", &data);
            head = insertAtEnd(head, data);
            break;
        case 4:
            printf("Linked List: ");
            printList(head);
            break;
        case 0:
            printf("Exiting the program.\n");
            break;
        default:
            printf("Invalid choice. Please enter a valid option.\n");
        }
    } while (choice != 0);

    // Free the memory allocated for the linked list before exiting
    struct Node *current = head;
    while (current != NULL)
    {
        struct Node *next = current->next;
        free(current);
        current = next;
    }

    return 0;
}
